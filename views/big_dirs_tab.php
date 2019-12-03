<div id="big_dirs-tab"></div>
<h2 data-i18n="big_dirs.title"></h2>

<table>
    <tr>
        <th>Item 1</th>
        <td id="big_dirs_item1"></td>
    </tr>
    <tr>
        <th>Item 2</th>
        <td id="big_dirs_item2"></td>
    </tr>
</table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/big_dirs/get_data/' + serialNumber, function(data){
        $('#big_dirs_item1').text(data['item1'])
        $('#big_dirs_item2').text(data['item2'])
    });
});
</script>
