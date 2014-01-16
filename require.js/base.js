define(function (argument) {
	var add = function (x, y){
		return x+y;
	};

	//返回plus和minus属性
	return {
		plus: add,
		minus: function (x, y){
			return x-y;
		}
	};
})