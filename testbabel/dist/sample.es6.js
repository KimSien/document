"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Hoge = function () {
    function Hoge(name) {
        _classCallCheck(this, Hoge);

        this.name = name;
    }

    _createClass(Hoge, [{
        key: "print",
        value: function print() {
            console.log("name=" + this.name);
        }
    }]);

    return Hoge;
}();

var hoge = new Hoge("Yuki");

new Promise(function (resolve, reject) {
    setTimeout(resolve, 4000);
}).then(function () {
    return hoge.print();
});
//# sourceMappingURL=sample.es6.js.map
