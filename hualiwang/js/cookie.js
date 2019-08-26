function getCookie(key) {
    var cookie = document.cookie;
    if (cookie) {
        var cookieList = cookie.split("; ");
        for (var i = 0; i < cookieList.length; i++) {
            var item = cookieList[i]; //"key=value"
            var itemList = item.split("="); //["key","value"]
            var itemKey = decodeURIComponent(itemList[0]);
            var itemValue = decodeURIComponent(itemList[1]);
            if (itemKey == key) {
                return itemValue;
            }
        }
        return "";

    } else {
        return "";
    }
}

//增(key不存在)删(days为负数)改(key存在)
function setCookie(key, value, days) {
    var date = new Date();
    date.setDate(date.getDate() + days);
    date.setHours(date.getHours() - 8);
    document.cookie = encodeURIComponent(key) + "=" + encodeURIComponent(value) + ";expires=" + date + ";path=/";
}