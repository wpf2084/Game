//获取角色名
var rolename=$("input[name=username]");
//确认按钮
var role_save=$("input[name=admin-role-save]");
// {:url('index/adminuser/tianjia_role')}

$('#admin-role-save').click(function(){

		var parms={
			"rolename":rolename.val()
		};
		var url="{:url('index/adminuser/tianjia_role')}";
		//alert(url);
		// $.ajax({
		// 	"type":"post",
		// 	"url":"index/adminuser/tianjia_role",
		// 	"dataType":"json",
		// 	"data":{
		// 		"rolename":rolename.val(),
		// 	},
		// 	"success":function(data){
		// 		alert(data.msg);
		// 	}
		// });
		$.post(url,parms,function(data){
				//alert(data.msg);
				alert(1);
		});
		
});