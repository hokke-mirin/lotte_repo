<?php
    use Illuminate\Http\Request;
    function index(Request $request){
        $sessions = $request->session()->all(); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>入力画面</title>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <div class="container">
            <h1>千葉ロッテ背番号入力</h1>
            <?php
            if(array_key_exists('msg', $sessions)){
                echo $request->$session()->get('msg');
            }
            ?>
            <form accept-charset="utf-8" method="post" action="index.php">
                名前：<br />
                <input type="text" name="name" required /><br />
                背番号：<br />
                <input type="text" name="number" required />（3桁まで）<br />
                誕生日：<br />
                <input type="text" name="BirthDate" required/>ex.1980.12.01、1980-12-01、19801201<br />
                <input type="radio" name="position" value="監督コーチ" /> 監督コーチ
                <input type="radio" name="position" value="投手" /> 投手
                <input type="radio" name="position" value="捕手" />捕手
                <input type="radio" name="position" value="内野手" /> 内野手
                <input type="radio" name="position" value="外野手" /> 外野手<br />
                <input type="submit" name="button" value="登録" />
                <input type="submit" name="button" value="削除" />

            </form>
            <table border=1>
                <tr><th>名前</th>
                    <th>背番号</th>
                    <th>誕生日</th>
                    <th>年齢</th>
                    <th>ポジション</th>
                </tr>
                <?php
                $disp_array = $_SESSION['disp_list'];
                foreach ($disp_array as $row => $value) {
                    ?>    
                    <tr>
                        <td> <?php print $value = $request->$session()->get('name'); ?> </td>
                        <td> <?php print $value = $request->$session()->get('number'); ?> </td>
                        <td> <?php print $value = $request->$session()->get('BirthDate'); ?> </td>
                        <td> <?php print $value = $request->$session()->get('age'); ?> </td>
                        <td> <?php print $value = $request->$session()->get('position'); ?> </td>
                    </tr>
 
<?php } ?>
            </table>
            <?php $request->session()->flush();?>
        </div>
    </body></html>