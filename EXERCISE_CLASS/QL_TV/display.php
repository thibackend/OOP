<?php

abstract class display
{
    abstract public function Display();
}


class Author extends display{
    private $gender;
    private $name;
    private $brithday;
    private $address ;
    public function __construct($gender,$name,
    $brithday,$address) {
       $this->gender =$gender;
       $this->name =$name;
       $this->brithday = $brithday;
       $this->address = $address;
    }
    public function Display(){
        return "<br> Name : {$this-> name}
                <br> Gender: {$this->gender}
                <br> brithday: {$this->address} <br>";
    }

}

class Category extends display{
    private $IDChuyenMuc;
    private $TenChuyenMuc; 
    private $Mota;
    public function __construct($IDChuyenMuc,$TenChuyenMuc,$Mota){
        $this->IDChuyenMuc= $IDChuyenMuc;
        $this->TenChuyenMuc=$TenChuyenMuc;
        $this->Mota=$Mota;
    }
    public function Display(){
        return "<br>IDchuyen muc: {$this->IDChuyenMuc} <br>
                TenChuyen muc: {$this->TenChuyenMuc} <br>
                Mo ta       : {$this->Mota}";
    }

}
class Book extends display{
   private $soID; 
   private $IDChuyenMuc;
   private $titlel;
   private $NXB ;
   private $NamXB;
   private $price;
    public function __construct($soID,$title,$NXB,$NamXB,$price){
        $this ->soID =$soID;
        $this ->title=$title;
        $this ->NXB =$NXB;
        $this ->NamXB=$NamXB;
        $this ->price =$price;
    }
    public function Display(){
            return "<br>ID is: {$this->soID}
            <br> Title is: {$this->title} 
            <br> NXB is: {$this->NXB}  
            <br> NamXB is: {$this->NamXB}
            <br> Price is : {$this->price}";
    }
    public function getSoID(){
        return $this->soID;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getNXB(){
        return $this->NXB;
    }
    public function getNamXB(){
        return $this->NamXB;
    }
    public function getPrice(){
        return $this->price;
    }
}


class Loan extends display{
    private $ID_Loan;
    private $Date_Loan;
    private $Loan_amount;

    public function __construct($ID_Loan,$Date_Loan,$Loan_amount){
        $this->ID_Loan = $ID_Loan;
        $this->Date_Loan =$Date_Loan;
        $this->Loan_amount =$Loan_amount;
    }

    public function Display(){
        return "<br>ID Loan : {$this->ID_Loan}
        <br> Date Loan : {$this->Date_Loan} <br>
        Loan_amount   : {$this->Loan_amount}
        ";
    }
}

class Library extends display{
    private $ID_Library;
    private $address;
    public function __construct($ID_Library,$address){
        $this ->ID_Library= $ID_Library;
        $this ->address = $address;
    }
    public function Display(){
        return "<br> ID library : {$this->ID_Library} <br>
        Library Address :{$this->address} <br>";
    }
}

class Student extends display{
    private $ID_Student;
    private $gender ;
    private $bridthday;
    private $class;
    private $khoa;

    public function __construct($ID_Student,$gender,$bridthday,$class,$khoa){
        $this->ID_Student=$ID_Student;
        $this->gender = $gender;
        $this->bridthday =$bridthday;
        $this->class =$class;
        $this->khoa = $khoa;
    }

    public function Display(){
     
        return "<br>ID student : {$this->ID_Student} 
        <br> Gender  : {$this ->gender}
        <br> bridthday : {$this->bridthday}
        <br> Class     : {$this-> class}
        <br> Khoa      : {$this-> khoa}";
    }
}

class Library_Book extends Book{
    private $ID_Lib_Book;
    private $ViTriKe;
    private $NgayNhap;

    public function __construct(
        $soID,$IDChuyenMuc,$title,$NXB,$NamXB,$price,
        $ID_Lib_Book,$ViTriKe,$NgayNhap){
        parent::__construct($soID,$IDChuyenMuc,$title,$NXB,$NamXB,$price);
        $this->ID_Lib_Book =$ID_Lib_Book;
        $this->ViTriKe =$ViTriKe;
        $this->NgayNhap =$NgayNhap;
    }
    public function Display(){
        return parent::Display()."
        <br>Id library -book : {$this->ID_Lib_Book} 
        <br>Vi tri Ke :  {$this ->ViTriKe}
        <br>Ngay Nhap : {$this->NgayNhap}";
    }
    
}







$category = new Category("03KT","Khoa hoc","chuyen ve quai vat");
$author = new Author("male","Nguyen Vu","17/07/2013","Quang Quach- Ha Tinh -Son dong");
$book =new Book(1,"Help me","Thi handsome",2003,300.322);
$Lib_Book = new Library_Book("30TK",$book->getSoID(),$book->getTitle(),$book ->getNXB(),
            $book->getNamXB(),$book->getPrice(),"T30","goc 2 tang 3 ","20/10/2003",
);
$loan=new Loan("3011",'20/12/2030',300);
$library =new Library(032,"Kon Tum");
$student = new Student("PNV3","male","17/07/2031","24A","Cong Nghe Thong Tin");


?>
<html>
<body>
    <center>
    <h1>Information all the tables</h1>
    <div class="show">
        <div class="a"> <h2>Category</h2> <?php echo $category->Display();?></div>
        <div class="a"> <h2>Author</h2> <?php echo $author->Display();?></div>
        <div class="a">  <h2>BOOK</h2> <?php echo $book->Display();?></div>
        <div class="a">  <h2>Library - Book</h2> <?php echo $Lib_Book->Display();?></div>
        <div class="a">  <h2>Loan</h2> <?php echo $loan->Display();?></div>
        <div class="a">  <h2>Library</h2> <?php echo $library->Display();?></div>
        <div class="a">  <h2>Student</h2>  <?php echo $student->Display();?></div>

    </div>
</center>
<style>

    .show{
        display:grid;
        grid-template-columns: auto auto;
    }
    .a{
        margin: 20px;
        background:black;
        color:white ;
        padding:10px;
    }
</style>
</body>

</html>