window.main  = {
	test: function(){
		console.log('hello world lib!!!');
	},
	callOther: function(){
		console.log('call other');
		lib.test();
	}
}