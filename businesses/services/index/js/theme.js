var saveSelectColor = {
    'Name': 'SelcetColor',
    'Color': 'theme-white'
}

$(function(){
	$(".skiner-white").on("click", function(){
		
		$("#main_iframe").contents().find("body").toggleClass('theme-black').attr('class', 'theme-white')
	})
	$(".skiner-black").on("click", function(){
		$("#main_iframe").contents().find("body").toggleClass('theme-white').attr('class', 'theme-black')
	})
})

// 判断用户是否已有自己选择的模板风格
if (storageLoad('SelcetColor')) {
    $('body').attr('class', storageLoad('SelcetColor').Color)
} else {
    storageSave(saveSelectColor);
    $('body').attr('class', 'theme-black')
}


// 本地缓存
function storageSave(objectData) {
    localStorage.setItem(objectData.Name, JSON.stringify(objectData));
}

function storageLoad(objectName) {
    if (localStorage.getItem(objectName)) {
        return JSON.parse(localStorage.getItem(objectName))
    } else {
        return false
    }
}