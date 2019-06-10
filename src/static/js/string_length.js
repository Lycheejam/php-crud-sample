/**
 * 文字列カウンター
 * @param {string} countTarget カウント対象のinput要素ID名
 * @param {string} resultTarget 文字列カウント結果の挿入先ID名
 */
function StringCount (countTarget, resultTarget) {
  var len = document.getElementById(countTarget).value.length;
  document.getElementById(resultTarget).innerText = len;
}