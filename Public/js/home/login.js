define(function() {
	var checkLogin = function(userid) {
		if (userid <= 0) return 0;
		return 1;
	}

	return {
		checkLogin: checkLogin
	};
});