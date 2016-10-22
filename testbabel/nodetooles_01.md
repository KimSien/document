# ReadMe (used commandline npm tooles)

# Index
- 0 enviroment check
- 1 install and setting common(node,npm)
- 2 inst babel
- 3 inst eslint

- 1-1 node,package.json
- 2-1 run babel

	2-1-* babel-polyfill

- 2-2 run eslint

- 2-2 babel auto running setting -> next document nodetooles_02.md


after

Q&A


--------------------------------------------------
# 0 enviroment check / since 201010

1 comon

- windows 8
- node -v 4.6.0
- npm -v 2.15.9

2 babel
- babel --version 6.16.0

3 eslint
- eslint -v 3.8.1
--------------------------


--------------------------
require develop enviroment
--------------------------

# 1 common

- node install

[node](https://nodejs.org/en/)


- npm

windows docker -> npm version is 2.15.9

! **************

npm update -g

! **************

npm is no problem. but this dependencies package a part have so problem.
npm update -g
command run.

after checked es convert is success!


# 2 babel
- babel
[babel-cli babelのコマンドライン実行](http://qiita.com/a_ishidaaa/items/a0899d42ddc0545190a1)
babel 6.X.Xから、インストールパッケージは babel ではなく babel-cliになったとのこと

- eslint,babel-eslint
[babel/babel-eslint](https://github.com/babel/babel-eslint)

check babell version! diffcult way to install with eslint.

```

$ npm install eslint@1.x babel-eslint@5 --save-dev

$ npm install eslint@2.x babel-eslint@6 --save-dev

$ npm install eslint@3.x babel-eslint@6 --save-dev

```

### 2-1-* babel-polyfill

$npm install -g --save-dev babel-polyfill babel-core

this samplefile under testpoly.es6.js




# 3 eslint

[eslint](http://eslint.org/docs/user-guide/getting-started)

checking the config file. you select the cli command

```
eslint --init

```

this command input after success eslint my files.


--------------------------
# how command run ? 


## 1-1 node,package.json
[].package.json









## 2-1 babel run

2-1-1 make config files.
[].babelrc - under document check

2-1-2 make es6 file. under document check

2-1-3 run command

babel *originfilename* -o *outputfilename*



## 3-1 eslint run

3-1-1 setting config  [] .eslintrc

! command
eslint --init

3-2-2 run command

eslint *scriptname*








--------------------------------

## 2-2  babel auto running setting

[ECMAScript6を書きたい part1 ](http://qiita.com/YukiMiyatake/items/1e11e7b96528a0d1267d)














--------------------------
# check question

Q how command npm install package?

A
npm ls -g / allpackage check
npm ls -g [packagename] / specifity page check


Q if command not run? serch the cause?
A 
most checked npm etc version.and update.

or 

checking original document and site.
if version up? change setting file and command at new version.




























---------------------------
## config document.

---------
[].babelrc
{
  "presets": ["es2015"]
}

---------
[] sample.es6.js

class Hoge {
	constructor(name){
		this.name=name;
	}
	print(){
		console.log("name="+this.name);
	}
}

var hoge = new Hoge("Yuki");
hoge.print();

---------
[]testpoly.es6.js

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
        setTimeout(resolve, 5000)
}).then(() => hoge.print());


---------
[].package.json

{
  "parser": "babel-eslint",
  "env": {
    "node": true,
    "es6": true
  },
  "rules": {
    "no-undef": 2,
    "semi": 1,
    "no-unused-vars": [
      1,
      {
        "vars": "all",
        "args": "after-used"
      }
    ]
  },
  "devDependencies": {
    "babel-eslint": "^6.1.2",
    "babel-preset-es2015": "^6.16.0",
    "eslint": "^3.8.1"
  }
}



