# adapter pattern


[adapter pattern](http://blog.codebook-10000.com/entry/20131218/1387373716)


alredy enough testing class change to interface & provide.
this adapter pattern used.


memo

class A{
	method A
	method B
}

A^ extends A implements C{
	method A^{
		class A::method A
	}
	method B^{
		class A::method B
	}

}

interface C{
	method A^
	method B^
}

routhly?


