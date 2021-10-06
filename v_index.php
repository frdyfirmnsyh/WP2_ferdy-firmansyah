<section>
	<h1><?php echo $judul ?></h1>
	<p align="justify" > Pada pengertian Codeigneter di atas
 tadi jelaskan bahwa codeigniter menggunakan metode MVC. apa itu
MVC? kita juga harus mengetahui apa itu mvc sebelum masuk dan lebih
jauh dalam belajar codeigniter.</p>
              <p>MVC adalah teknik atau konsep yang memisahkan
komponen utama menjadi tiga komponen yaitu model, view, dan
controller.</p>

                  <ol type="a">
                  <li>model</li>
<p align='justify'>Model adalah kelas yang mempresentasikan atau
memodelkan tipe data yang akan di gunakan oleh aplikasi. model juga
dapat di definisikan sebagai bagian penanganan yang berhubungan dengan
pengeolahan atau manipulasi database. seperti misalnya mengambil data
dari database, menginput dan mengolah database lainya. semua
intruksi atau fungsi  yang berhubung dengan pengolahan database di
letakan di dalam model. sebagai contoh, jika ingin membuat aplikasi
untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan
objek lingkaran sebagai kelas model.</p>
<p align='justify'>sebagai catatan semua model harus di simpan di
dalam folder applications/models</p>
<li>View</li>
<p align='justify'>view merupakan bagian yang menangani halaman user
interface atau halaman yang muncul pada user(pada browser). tampilan
pada user interface di kumpulkan pada view untuk memisahkanya
dengan controller dan model sehingga memudahkan web designer dalam
melakukan pengembangan tampilan halaman website.</p>
<li>controller</li>
<p align='justify'>Controller merupakan kumpulan intruksi aksi yang
menghubungkan model dan view, jadi user tidak akan berhubungan
dengan model secara langsung, intinya data yang tersimpan di
database (model) di ambil oleh controller dan kemudian controller
pula yang menampilkanya ke view. jadi controller lah yang mengolah
intruksi.</p>
<p align='justify'>dari penjelasan tentang model view dan controller
di atas dapat di simpulkan bahwa controller sebagai penghubung view
dan model. misalnya pada aplikasi yang menampilkan data dengan
menggunakan metode konsep mvc, controller memanggil intruksi pada
model yang mengambil pada database, kemudian conttroler yang
meneruskanya pada view untuk di tampilkan. jadi jelas sudah dan
sangat mudah dengan mengembangkan aplikasi dengan cara mvc ini karena
web designer atau front-end developer tidak perlu lagi berhubungan
dengan controller, dia hanya perlu berhubungan dengan view untuk
mendesign tampilan aplikasi, karna back-end developer yang
mengenai bagian controller dan modelnya. jadi pembagian tugas pun
menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan
cepat dan terstruktur.</p>
         </section>