<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>皮带输送机巡检</title>
</head>
<body>
    <fieldset>
        <legend>皮带机巡检点</legend>
        <img src="/img/pdj.jpg" height="500" width="1300" />
    </fieldset>
 <hr />
   <form action="php.php" method="post">
    <table border="4">
        <tr><td>巡检项目</td><td>巡检状态</td><td>巡检项目</td><td>巡检状态</td></tr>
        <tr><td>检查点1状态</td><td><input type="radio" name="1" value="异常" />异常<input type="radio" name="1" value="正常" />正常</td><td>检查点2状态</td><td><input type="radio" name="2" value="异常" />异常<input type="radio" name="2" value="正常" />正常</td></tr>
        <tr><td>检查点3状态</td><td><input type="radio" name="3" value="异常" />异常<input type="radio" name="3" value="正常" />正常</td><td>检查点4状态</td><td><input type="radio" name="4" value="异常" />异常<input type="radio" name="4" value="正常" />正常</td></tr>
        <tr><td>检查点5状态</td><td><input type="radio" name="5" value="异常" />异常<input type="radio" name="5" value="正常" />正常</td><td>检查点6状态</td><td><input type="radio" name="6" value="异常" />异常<input type="radio" name="6" value="正常" />正常</td></tr>
        <tr><td>检查点7状态</td><td><input type="radio" name="7" value="异常" />异常<input type="radio" name="7" value="正常" />正常</td><td>检查点8状态</td><td><input type="radio" name="8" value="异常" />异常<input type="radio" name="8" value="正常" />正常</td></tr>
        <tr><td>检查点9状态</td><td><input type="radio" name="9" value="异常" />异常<input type="radio" name="9" value="正常" />正常</td><td>检查点10状态</td><td><input type="radio" name="10" value="异常" />异常<input type="radio" name="10" value="正常" />正常</td></tr>
        <tr><td>检查点11状态</td><td><input type="radio" name="11" value="异常" />异常<input type="radio" name="11" value="正常" />正常</td><td>检查点12状态</td><td><input type="radio" name="12" value="异常" />异常<input type="radio" name="12" value="正常" />正常</td></tr>
    </table>
          <textarea name="bz" cols="100" rows="5">备注:</textarea> <br/>
          设备编号：<input type="text" name="id" value="皮带机" readonly> 
    <br />
     巡检人：<input type="text" name="uname" />      提供图片：<input type="file" name="fl" />       <input type="submit" value="提交">
  </form>
</body>
</html>
