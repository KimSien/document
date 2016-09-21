# design pattern of gof 23

## Index

- 1 pattern 23
- 2


## pattern 23

・Factory Method	- new in the class

・abstruct Factory - 

・Builder - devide constructor from class

・Prototype - to copy class property

・Singleton - instance only one

・Adapter - rapper

・Bridge - use transfer and abstract base

・Composite - think of file and directory is same object

・Decorator - class decorator + etc transfer

・Facade - aggregate of method(class)

・Flyweight - decrease of class with object share

・Proxy - this question anser by attorney class.

・Interpreter - interpreter


・Template Method - template


・Chain of Responsibility

・Command - task queue and stack

	i image like of facade pattern.

・Iterator - for,map

・Mediator - mutual class operation

・Memento - save class property

・Observer - listner

・State - do change of state

・Strategy - change logic

・Visitor - devide data and method


--------------------------------

## 2 memo

entry case : what design pattern select?



--- itarator --------------------------

Q 1 assummption of this case ?
- data list > add colum
- repaire foreach

A 1
Iterator



!point

	iterator method point is unknown data of forech.

	create director class - has iterator and iterator while print
	iterator method have next,hasnext <- bookdata etc
	

! step by step

class Book(){
	const set book -> devide data & itarator 
	output -> foreach book
}

	by the mention above program.
	you need unknown or extends point.

	this pattern is unknown datalist type and extends push up data.


------------------------------------------



Q 2
- 


















