# File with heading

Task PHP OOP

Sebelum mengerjakan challenge ini, buatlah sebuah folder dengan nama “oop” di dalam direktori htdocs kalian. Di dalam folder oop tersebut buatlah sebuah file index.php sebagai entry dari program yang akan dibuat.

Class Animal

Terdapat sebuah class Animal yang memiliki sebuah constructor name, default property legs = 4 dan cold_blooded = no.

Release 0

Buatlah class Animal tersebut di dalam file animal.php.Lakukan instance terhadap class Animal tersebut di file index.php. Lakukan import class Animal dari animal.php di dalam index.php menggunakan require atau require once (mengenai require bisa baca dari artikel berikut).

Tampilkan nama dari Animal yang baru dibuat tersebut.

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun" \
echo $sheep->legs; // 4 \
echo $sheep->cold_blooded; // "no" \

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

Release 1

Buatlah class Frog dan class Ape yang merupakan inheritance dari class Animal. Masing-masing class dibuat ke dalam satu file (Frog.php & Ape.php). Perhatikan bahwa Ape (Kera) merupakan hewan berkaki 2, hingga dia tidak menurunkan sifat jumlah kaki 4. class Ape memiliki function yell() yang mengeprint “Auooo” dan class Frog memiliki function jump() yang akan mengeprint “hop hop”.

// index.php\
$sungokong = new Ape("kera sakti"); \\
$sungokong->yell() // "Auooo" \\
\
$kodok = new Frog("buduk");\
$kodok->jump() ; // "hop hop"\
\
output akhir\
Name : shaun\
legs : 4\
cold blooded : no\
\
Name : buduk\
legs : 4\
cold blooded : no\
Jump : Hop Hop\
\
Name : Kera sakti\
legs : 2\
cold blooded : no\
Yell : auooo\
\

Kumpulkan Link Githubnya dan screenshoot hasil pekerjaan