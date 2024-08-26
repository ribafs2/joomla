<?php

// Exemplo
     $db = JFactory::getDBO();
     $db->getQuery(true);
     $query = "SELECT categoria, imagem, descricao FROM #__modelo ORDER BY categoria, id ASC";
     $db->setQuery( $query);
     $rows = $db->loadObjectList();
     $nr=$db->getAffectedRows();

print '<table border="2">';
print '<tr><td>Categoria</td><td>Imagem</td><td>Descrição</td></tr>';
foreach($rows as $row){
    print '<tr><td>'.$row->categoria.'</td><td>'.$row->imagem.'</td><td>'.$row->descricao.'</td></tr>';
}
print '</table>';

