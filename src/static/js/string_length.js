if (typeof Utils === 'undefined') {
  var Utils = {};
};

/**
 * 文字列カウンター
 * @param {string} countTarget カウント対象のinput要素ID名
 * @param {string} resultTarget 文字列カウント結果の挿入先ID名
 */
Utils.StringCount = function (countTarget, resultTarget) {
  var len = document.getElementById(countTarget).value.length;
  document.getElementById(resultTarget).innerText = len;
}