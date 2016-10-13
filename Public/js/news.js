$(function() {
    validate();
    $("#form1").submit(function() {
        var title = $.trim($("#title").val());
        var content = "";
        var author = "";
        content=ue.getPlainText();
        alert(content);
        if (title == "" || title == null || title == undefined) {
            $("#title").next("span").next("span").addClass("error").text("标题不能为空");
            return false;
        } else {
            if (getByteLen(title) < 10 || getByteLen(title) > 20) {
                $("#title").next("span").next("span").addClass("error").text("不能少于10个或超过20个字符");
                return false;
            }
        }

        if (content == "" || content == null || content == undefined) {
            alert("内容不能为空");
            return false;
        }
    });
})

function validate() {
    $("#title").bind("keyup", function() {
        var oThis = $(this);
        var len = getByteLen(oThis.val());
        var remain = 20 - len;
        //console.log("剩余：" + remain);
        if (remain < 0) {
            //oThis.next("span").addClass("error");
            // remain = 0;
            $(".num").html("已超过<span class='error'>"+parseInt(-remain)+"</span>字");
            return false;
        } else {
            $(".num").html("剩余<span>"+parseInt(remain)+"</span>字");
        };
    }).bind("blur", function() {
        var text = $.trim($(this).val());
        var rs = stripscript(text);
        console.log(rs);
    });
}
/**
 * 对表单进行验证
 */
function formValidate() {
    // $("#form1").submit(function() {
    //     var title = $.trim($("#title").val());
    //     //var content = $.trim($("#editor").val());
    //     var content=ue.getPlainText();
    //     alert(content);
    //     return;
    //     var author = $.trim($("#author").val());
    //     if (title == "" || title == null || title == undefined) {
    //         $("#title").next("span").next("span").addClass("error").text("标题不能为空");
    //         return false;
    //     } else $("#title").next("span").next("span").removeClass("error");
    //     if (content == "" || content == null || content == undefined) {
    //         $("#editor").next("span").addClass("error").text("内容不能为空");
    //         return false;
    //     } else $("#content").next("span").removeClass("error");
    //     // if (author == "" || author == null || author == undefined) {
    //     //     $("#author").next("span").addClass("error").text("作者不能为空");
    //     //     return false;
    //     // }
    //     if (checkScriptChar(title)) {
    //         $("#title").next("span").next("span").addClass("error").text("标题有非法内容");
    //         return false;
    //     } else $("#title").next("span").next("span").removeClass("error");
    //     // if (checkScriptChar(content)) {
    //     //     $("#editor").next("span").addClass("error").text("内容有非法内容");
    //     //     console.log("sssssssss");
    //     //     return false;
    //     // } else $("#editor").next("span").removeClass("error");
    //     if (checkScriptChar(author)) {
    //         $("#author").next("span").addClass("error").text("作者有非法内容");
    //         return false;
    //     } else $("#author").next("span").removeClass("error");
    //     //$("#form1").submit();
    // });
}

function getByteLen(val) {
    var len = 0;
    for (var i = 0; i < val.length; i++) {
        var a = val.charAt(i);
        if (a.match(/[^\x00-\xff]/ig) != null) {
            len += 2;
        } else {
            len += 1;
        }
    }
    return len;
}
/**
 * 使用字符unicode判断字符长度
 */
// function getByteLen(val) {
//     var len = 0;
//     for (var i = 0; i < val.length; i++) {
//         var length = val.charCodeAt(i);
//         if (length >= 0 && length <= 128) {
//             len += 1;
//         } else {
//             len += 2;
//         }
//     }
//     return len;
// }
//过滤非法字符  
function stripscript(s) {
    var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥……&*（）——|{}【】‘；：”“'。，、？]")
    var rs = "";
    for (var i = 0; i < s.length; i++) {
        rs = rs + s.substr(i, 1).replace(pattern, '');
    }
    return rs;
}
//检查非法过滤字符
function checkScriptChar(s) {
    var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥……&*（）——|{}【】‘；：”“'。，、？]")
    var rs = "";
    // for (var i = 0; i < s.length; i++) {
    //     rs = rs + s.substr(i, 1).replace(pattern, '');
    // }
    if (pattern.test(s)) return true;
    return false;
}
