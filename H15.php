<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>设备运行状态查询</title>
</head>
<body>
    <fieldset>
        <legend>设备运行状态查询</legend>
        <img src="/img/x.jpg" height="500" width="1300" />
    </fieldset>
 <hr />
   <form action="php1.php" method="post">
    		请选择查询设备编号：  <select name="bh">
								  <option value="包装机">包装机</option>
								  <option value="异形烟">异形烟</option>
								  <option value="皮带机">皮带机</option>
								  <option value="打包机">打包机</option>
								  <option value="发电机">发电机</option>
								  <option value="链板输送机">链板输送机</option>
								  <option value="激光划箱机">激光划箱机</option>
								  <option value="激光机">激光机</option>
								  <option value="开箱机">开箱机</option>
								  <option value="空压机">空压机</option>
								  <option value="立式机">立式机</option>
								  <option value="排序">排序</option>
								  <option value="卧式机">卧式机</option>
								  <option value="补货小车">补货小车</option>
							</select>
		请选择查询日期：  <input type="text" name="sdate"/>--<input type="text" name="edate"/> （备注：日期格式为年-月-日）<input type="submit" value="查询">
		
  </form>
</body>
</html>
