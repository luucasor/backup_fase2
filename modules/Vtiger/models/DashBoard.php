<?php

/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Vtiger_DashBoard_Model extends Vtiger_Base_Model {

    /**
     * Function to get Module instance
     * @return <Vtiger_Module_Model>
     */
    public function getModule() {
        return $this->module;
    }

    /**
     * Function to set the module instance
     * @param <Vtiger_Module_Model> $moduleInstance - module model
     * @return Vtiger_DetailView_Model>
     */
    public function setModule($moduleInstance) {
        $this->module = $moduleInstance;
        return $this;
    }

    /**
     *  Function to get the module name
     *  @return <String> - name of the module
     */
    public function getModuleName() {
        return $this->getModule()->get('name');
    }

    /**
     * Function returns the list of Widgets
     * @return <Array of Vtiger_Widget_Model>
     */
    public function getSelectableDashboard() {
        $db = PearDatabase::getInstance();
        $currentUser = Users_Record_Model::getCurrentUserModel();
        $currentUserPrivilegeModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
        $moduleModel = $this->getModule();

        $sql = 'SELECT * FROM vtiger_links WHERE linktype = ?
					AND tabid = ? AND linkid NOT IN (SELECT linkid FROM vtiger_module_dashboard_widgets
					WHERE userid = ?)';
        $params = array('DASHBOARDWIDGET', $moduleModel->getId(), $currentUser->getId());

        $sql .= ' UNION SELECT * FROM vtiger_links WHERE linklabel in (?,?)';
        $params[] = 'Mini List';
        $params[] = 'Notebook';
        $result = $db->pquery($sql, $params);

        $widgets = array();
        for ($i = 0; $i < $db->num_rows($result); $i++) {
            $row = $db->query_result_rowdata($result, $i);

            if ($row['linklabel'] == 'Tag Cloud') {
                $isTagCloudExists = getTagCloudView($currentUser->getId());
                if ($isTagCloudExists == 'false') {
                    continue;
                }
            }
            if ($this->checkModulePermission($row)) {
                $widgets[] = Vtiger_Widget_Model::getInstanceFromValues($row);
            }
        }

        return $widgets;
    }

    /**
     * Function returns List of User's selected Dashboard Widgets
     * @return <Array of Vtiger_Widget_Model>
     */
    public function getDashboards() {
        ini_set("error_reporting", "6135");
        $db = PearDatabase::getInstance();
        $currentUser = Users_Record_Model::getCurrentUserModel();
        $moduleModel = $this->getModule();

        $sql = " SELECT vtiger_links.*, vtiger_module_dashboard_widgets.userid, vtiger_module_dashboard_widgets.filterid, vtiger_module_dashboard_widgets.data, vtiger_module_dashboard_widgets.id as widgetid, vtiger_module_dashboard_widgets.position as position, vtiger_links.linkid as id FROM vtiger_links " .
                " INNER JOIN vtiger_module_dashboard_widgets ON vtiger_links.linkid=vtiger_module_dashboard_widgets.linkid" .
                " WHERE (vtiger_module_dashboard_widgets.userid = ? AND linktype = ? AND tabid = ?)";
        $params = array($currentUser->getId(), 'DASHBOARDWIDGET', $moduleModel->getId());
        $result = $db->pquery($sql, $params);

        $widgets = array();

        for ($i = 0, $len = $db->num_rows($result); $i < $len; $i++) {
            $row = $db->query_result_rowdata($result, $i);
            $row['linkid'] = $row['id'];
            if ($this->checkModulePermission($row)) {
                $widgets[] = Vtiger_Widget_Model::getInstanceFromValues($row);
            }
        }

        foreach ($widgets as $index => $widget) {
            $label = $widget->get('linklabel');
            if ($label == 'Tag Cloud') {
                $isTagCloudExists = getTagCloudView($currentUser->getId());
                if ($isTagCloudExists === 'false')
                    unset($widgets[$index]);
            }
        }

        return $widgets;
    }

    /**
     * Function to get the default widgets(Deprecated)
     * @return <Array of Vtiger_Widget_Model>
     */
    public function getDefaultWidgets() {
        //TODO: Need to review this API is needed?
        $moduleModel = $this->getModule();
        $widgets = array();

        return $widgets;
    }

    /**
     * Function to get the instance
     * @param <String> $moduleName - module name
     * @return <Vtiger_DashBoard_Model>
     */
    public static function getInstance($moduleName) {
        $modelClassName = Vtiger_Loader::getComponentClassName('Model', 'DashBoard', $moduleName);
        $instance = new $modelClassName();

        $moduleModel = Vtiger_Module_Model::getInstance($moduleName);

        return $instance->setModule($moduleModel);
    }

    /**
     * Function to get the module and check if the module has permission from the query data
     * @param <array> $resultData - Result Data From Query
     * @return <boolean>
     */
    public function checkModulePermission($resultData) {
        $currentUserPrivilegeModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
        $linkUrl = isset($resultData['linkurl']) ? $resultData['linkurl'] : null;
        $linkLabel = isset($resultData['linklabel']) ? $resultData['linklabel'] : null;
        $filterId = isset($resultData['filterid']) ? $resultData['filterid'] : null;
        $data = isset($resultData['data']) ? decode_html($resultData['data']) : null;
        $module = $this->getModuleNameFromLink($linkUrl, $linkLabel);

        if ($module == 'Home' && !empty($filterId) && !empty($data)) {
            $filterData = Zend_Json::decode($data);
            $module = $filterData['module'];
        }

        return $currentUserPrivilegeModel->hasModulePermission(getTabid($module));
    }

    /**
     * Function to get the module name of a widget using linkurl
     * @param <string> $linkUrl
     * @param <string> $linkLabel
     * @return <string> $module - Module Name
     */
    public function getModuleNameFromLink($linkUrl, $linkLabel) {
        $urlParts = parse_url($linkUrl);
        parse_str($urlParts['query'], $params);
        $module = $params['module'];

        if ($linkLabel == 'Overdue Activities' || $linkLabel == 'Upcoming Activities') {
            $module = 'Calendar';
        }

        return $module;
    }

    public static function getContactSubDetails() {
        global $adb;

        $contactsubdetails = $adb->pquery("
            SELECT
                DISTINCT

                    (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Outro' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS OUTROS,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
					CRM.deleted != 1 AND
                    CON.leadsource = 'Loja' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS LOJA,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
					CRM.deleted != 1 AND
                    CON.leadsource = 'Visitantes' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS VISITANTES,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
					CRM.deleted != 1 AND
                    CON.leadsource = 'DBM' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS DBM,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Site' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS SITE,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Chat Online' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS CHAT,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Facebook' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS FACE,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Youtube' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS YT,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Linkedin' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS LIN,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Instagram' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS INSTA,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Twitter' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS TWI,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Participação em eventos' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PE,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'PDVs' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PDV,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Indicações' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS IND,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Landingpage de Produto' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS LPP,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Parceiro' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PAR,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Mídia tradicional (outdoor/fachada/rádio)' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS MT,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Pesquisa de Satisfação' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PS,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    CON.leadsource = 'Pesquisa Google' AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PG,

                (SELECT COUNT(*)
                 FROM vtiger_contactsubdetails AS CON
                      INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
                 WHERE
				    CRM.deleted != 1 AND
                    DAY(CRM.createdtime) = DAY(CURDATE()) AND
                    MONTH(CRM.createdtime) = MONTH(CURDATE()) AND
                    YEAR(CRM.createdtime) = YEAR(CURDATE())) AS TOTAL_CONTATO

            FROM vtiger_contactsubdetails WHERE 1
            ");

        return $contactsubdetails;
    }

    public static function getContactscf() {
        global $adb;
        $contactscf = $adb->pquery("
            SELECT
                DISTINCT
                    (SELECT COUNT(*)
                     FROM vtiger_contactscf AS CON
                            INNER JOIN vtiger_crmentity AS ENT ON (CON.contactid = ENT.crmid)
                     WHERE
						ENT.deleted != 1 AND
                        CON.cf_893 = 'Qualificado' AND
                        DAY(ENT.createdtime) = DAY(CURDATE()) AND
                            MONTH(ENT.createdtime) = MONTH(CURDATE()) AND
                            YEAR(ENT.createdtime) = YEAR(CURDATE())
                    ) as QUA,

                    (SELECT COUNT(*)
                     FROM vtiger_contactscf AS CON
                            INNER JOIN vtiger_crmentity AS ENT ON (CON.contactid = ENT.crmid)
                     WHERE
						ENT.deleted != 1 AND
                        CON.cf_893 = 'Não Qualificado' AND
                        DAY(ENT.createdtime) = DAY(CURDATE()) AND
                            MONTH(ENT.createdtime) = MONTH(CURDATE()) AND
                            YEAR(ENT.createdtime) = YEAR(CURDATE())

                    ) as NQUA,

                    (SELECT COUNT(*)
                     FROM vtiger_contactscf AS CON
                            INNER JOIN vtiger_crmentity AS ENT ON (CON.contactid = ENT.crmid)
                     WHERE
						ENT.deleted != 1 AND
                        CON.cf_893 = 'Pipeline' AND
                        DAY(ENT.createdtime) = DAY(CURDATE()) AND
                            MONTH(ENT.createdtime) = MONTH(CURDATE()) AND
                            YEAR(ENT.createdtime) = YEAR(CURDATE())

                    ) as PIPELINE_CONTATO,

                    (SELECT COUNT(*)
                     FROM vtiger_contactscf AS CON
                        INNER JOIN vtiger_crmentity AS ENT ON (CON.contactid = ENT.crmid)
                     WHERE
						ENT.deleted != 1 AND
                        DAY(ENT.createdtime) = DAY(CURDATE()) AND
                        MONTH(ENT.createdtime) = MONTH(CURDATE()) AND
                        YEAR(ENT.createdtime) = YEAR(CURDATE())
                     ) as TOTAL_CONTATO
            FROM vtiger_contactscf WHERE 1");
        return $contactscf;
    }

    public static function getPotentialscf(){
        global $adb;
        $potentialscf = $adb->pquery("
            SELECT
                DISTINCT
                    (SELECT COUNT(*)
                     FROM vtiger_potentialscf AS PON
                            INNER JOIN vtiger_crmentity AS ENT ON (PON.potentialid = ENT.crmid)
                     WHERE
						ENT.deleted != 1 AND
                        PON.cf_987 = 'Convertida em Venda' AND
                        DAY(ENT.createdtime) = DAY(CURDATE()) AND
                        MONTH(ENT.createdtime) = MONTH(CURDATE()) AND
                        YEAR(ENT.createdtime) = YEAR(CURDATE())

                    ) as CON,

                    (SELECT COUNT(*)
                     FROM vtiger_potentialscf AS PON
                            INNER JOIN vtiger_crmentity AS ENT ON (PON.potentialid = ENT.crmid)
                     WHERE
						ENT.deleted != 1 AND
                        PON.cf_987 = 'Perdida' AND
                        DAY(ENT.createdtime) = DAY(CURDATE()) AND
                        MONTH(ENT.createdtime) = MONTH(CURDATE()) AND
                        YEAR(ENT.createdtime) = YEAR(CURDATE())

                    ) as PER,

                    (SELECT COUNT(*)
                     FROM vtiger_potentialscf AS PON
                            INNER JOIN vtiger_crmentity AS ENT ON (PON.potentialid = ENT.crmid)
                     WHERE
						ENT.deleted != 1 AND
                        PON.cf_987 = 'Pipeline' AND
                        DAY(ENT.createdtime) = DAY(CURDATE()) AND
                        MONTH(ENT.createdtime) = MONTH(CURDATE()) AND
                        YEAR(ENT.createdtime) = YEAR(CURDATE())

                    ) as PIPELINE_PROPOSTA,

                    (SELECT COUNT(*)
                     FROM vtiger_potentialscf AS PON
                            INNER JOIN vtiger_crmentity AS ENT ON (PON.potentialid = ENT.crmid)
                     WHERE
						ENT.deleted != 1 AND
                        DAY(ENT.createdtime) = DAY(CURDATE()) AND
                        MONTH(ENT.createdtime) = MONTH(CURDATE()) AND
                        YEAR(ENT.createdtime) = YEAR(CURDATE())
                    ) as TOTAL_VENDA
            FROM vtiger_contactscf WHERE 1");

        return $potentialscf;
    }

}
