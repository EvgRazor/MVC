<?php foreach ($arr_table_mvc_news as $mms):?>
    Номер = <?= $mms['id']?><br>
    Раздел = <?= $mms['Category']?><br>
    Дата = <?=  $mms['Date']?><br>
    Заголовок = <?=  $mms['Short_content']?><br>
    Текст = <?=  $mms['Text']?><br>
    Автор = <?=  $mms['Avtor']?><br>
    <hr>
<?php endforeach; ?>

<?php

echo "Страница всех новостей";