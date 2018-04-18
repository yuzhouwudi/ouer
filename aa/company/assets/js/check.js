/**
 * Created by ow on 2018/4/13.
 */
$.validator.addMethod("check", function(value) {
    let tel =/^1[3-9]\d{9}$/;
    if(tel.exec(value)) {
        return true
    } else {
        return false
    }
}, "请正确填写您的号码");