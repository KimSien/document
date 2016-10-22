class Hoge {
    constructor(name) {
        this.name = name;
    }
    print(){
        console.log( "name=" + this.name );
    }
}

var hoge = new Hoge("Yuki");

new Promise((resolve, reject) => {
        setTimeout(resolve, 4000)
}).then(() => hoge.print());