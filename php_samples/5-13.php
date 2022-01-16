<?php

use app\Shop\Book;
use app\Review\Book as BookReview;
use League\CommonMark\Node\Inline\Newline;

require_once 'app/Shop/book.php';
require_once 'app/Review/book.php';

$book = new Book();
echo $book->getPrice();

echo "\n";

$book_review = new BookReview();
echo $book_review->getPoint();
