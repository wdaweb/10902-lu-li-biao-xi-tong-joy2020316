<div style="width:30%; height:50%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權文字修改區:</p>
    <form method="post" action="api/edit_info.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%" style="text-align:right">頁尾版權資料：</td>
                    <?php 
                    include_once 'base.php';

                      $bt=find('bottom',1);
                ?>
                    <td width="50%" style="text-align:left"><input type="text" name="bottom"
                            value="<?=$bt['bottom'];?>"></td>
                </tr>
            </tbody>
        </table>

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <input type="hidden" name="table" value="bottom">
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>