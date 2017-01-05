# iterator / time : 10 minitu

## reference

- [iterator](http://qiita.com/ritukiii/items/7a34a9a1eb7c7abd7d8b)

- [iterator](http://d.hatena.ne.jp/shimooka/20141215/1418620355)

```

## code

<?php

interface concreateBookshelf{
	public function hasNext();
	public function Next();
}

class Book{}

class BookShelf implements concreateBookshelf{
	
	private $books = [];
	private $index = 0;


	public function addBook(Book $book)
	{
		$this->books[] = $book;
	}

	public function hasNext(){
		if($this->index < $this->getLength()){
			return true;
		}
		return false;
	}

	public fuction Next(){
		$book = $this->books[$this->index];
		$this->index++;
		return $book;
	}

	public fuction getLength(){
		return count($this->books);
	}

}




?>

```


