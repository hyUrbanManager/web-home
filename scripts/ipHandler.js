// 处理站长网特殊的json。
function handlerIpText(text) {
    text = text.replace('\'', '\"');
    text = text.replace('\'', '\"');
    text = text.replace('\'', '\"');
    text = text.replace('\'', '\"');
    text = text.replace('ip', '"ip"');
    text = text.replace('address', '"address"');
    alert(text);
    var obj = JSON.parse(text);
    return '你的ip：' + obj.ip + '，来自 ' + obj.address;
}

