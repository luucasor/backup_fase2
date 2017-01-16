-- Etapa 1 - Verificar número de registros com tarefas
SELECT *
FROM vtiger_contactscf AS con
    INNER JOIN vtiger_cntactivityrel AS cnt ON (con.contactid = cnt.contactid)
WHERE cf_893 LIKE "%Contactar no Futuro%"
-- Total: 242


-- Etapa 1 - Atualização de registros que possuem tarefas para "Qualificado"
UPDATE vtiger_contactscf AS con
	INNER JOIN vtiger_cntactivityrel AS cnt ON (con.contactid = cnt.contactid)
SET cf_893 = "Qualificado"
WHERE cf_893 LIKE "%Contactar no Futuro%"
-- Total: 110 Afetados


-- Etapa 2 - Verificar número de registros sem tarefas
SELECT *
FROM vtiger_contactscf
WHERE cf_893 LIKE "%Contactar no Futuro%"
-- Total: 537

-- Etapa 2 - Atualização de registros que NÃO possuem tarefas para "Não Qualificado"
UPDATE vtiger_contactscf
SET cf_893 = "Não Qualificado"
WHERE cf_893 LIKE "%Contactar no Futuro%"
-- Total: 537 - OK

-- Não Qualificados antes do UPDATE 
-- Total: 510


-- Etapa 3 - Verificar número de registros 
SELECT *
FROM vtiger_contactscf
WHERE cf_893 LIKE "%Transferido%"
-- Total: 43

-- Etapa 3 - Operação de troca realizada pela tela.


