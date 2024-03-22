var reg_user_id_check = function() {
    var result = "";
    $.ajax({
        type: "POST",
        url: "/register_id_check",
        data: {
            "reg_user_id": $("#reg_user_id").val()
        },
        cache: false,
        async: false,
        success: function(data) {
            result = data;
        }
    });
    return result;
}

var reg_dup_user_id_check = function() {
    var result = "";
    $.ajax({
        type: "POST",
        url: "/register_id_dup_check",
        data: {
            "reg_user_id": $("#reg_user_id").val()
        },
        cache: false,
        async: false,
        success: function(data) {
            result = data;
        }
    });
    return result;
}

var reg_user_name_check = function() {
    var result = "";
    $.ajax({
        type: "POST",
        url: "/register_name_check",
        data: {
            "reg_user_name": encodeURIComponent($("#reg_user_name").val())
        },
        cache: false,
        async: false,
        success: function(data) {
            result = data;
        }
    });
    return result;
}


var reg_user_email_check = function() {
    var result = "";
    $.ajax({
        type: "POST",
        url: "/register_email_check",
        data: {
            "reg_user_email": $("#reg_user_email").val(),
            "reg_user_id": encodeURIComponent($("#reg_user_id").val())
        },
        cache: false,
        async: false,
        success: function(data) {
            result = data;
        }
    });
    return result;
}


var reg_user_hp_check = function() {
    var result = "";
    $.ajax({
        type: "POST",
        url: "/register_hp_check",
        data: {
            "reg_user_hp": $("#reg_user_hp").val(),
            "reg_user_id": encodeURIComponent($("#reg_user_id").val())
        },
        cache: false,
        async: false,
        success: function(data) {
            result = data;
        }
    });
    return result;
}

var reg_dup_user_hp_check = function() {
    var result = "";
    $.ajax({
        type: "POST",
        url: "/register_hp_dup_check",
        data: {
            "reg_user_hp": $("#reg_user_hp").val(),
            "reg_user_id": encodeURIComponent($("#reg_user_id").val())
        },
        cache: false,
        async: false,
        success: function(data) {
            result = data;
        }
    });
    return result;
}

var reg_user_pass_check = function() {
    var result = "";
    $.ajax({
        type: "POST",
        url: "/register_password_check",
        data: {
            "reg_user_password": $("#reg_user_password").val()
		},
        cache: false,
        async: false,
        success: function(data) {
            result = data;
        }
    });
    return result;
}
