if (typeof Utils === 'undefined') {
  var Utils = {};
};

/**
 * 文字列カウンター
 * @param {string} countTarget カウント対象のinput要素ID名
 * @param {string} resultTarget 文字列カウント結果の挿入先ID名
 */
Utils.StringCount = function(countTarget, resultTarget) {
  var len = document.getElementById(countTarget).value.length;
  document.getElementById(resultTarget).innerText = len;
}

Utils.StringCountEx = function(countTarget, resultTarget, maxCount = 0) {
  let text = document.getElementById(countTarget);
  let result = document.getElementById(resultTarget);

  let len = text.value.length;

  let color = '#000000';
  let bcolor = '#ffffff';

  if(maxCount > 0 && len > maxCount) {
    len = maxCount - len;
    color = '#ff0000';
    bcolor = '#ff0000';
  }

  result.style.color = color;
  text.style.backgroundColor = bcolor;

  result.innerText = len;
}