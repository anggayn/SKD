from PyPDF2 import PdfWriter, PdfReader

# Buka file PdfReader
file_path = r"F:\SEMESTER 3\PRAKTIK DAN MATERI SISTEM KEAMANAN DATA\RAS\V3922006_Angga Yudho Nugroho_UTS.pdf"
file = PdfReader(file_path)

# Masukkan password enkripsi
password = "angga"

# Buat objek PdfWriter untuk menyimpan file yang sudah dienkripsi
out = PdfWriter()

# Program membaca setiap halaman file sesuai halaman yang diidentifikasi
for idx in range(len(file.pages)):
    out.add_page(file.pages[idx])

# Enkripsi seluruh file
out.encrypt(password)

# Buka file enkripsi "TestSKDbaru.pdf"
output_path = r"F:\SEMESTER 3\PRAKTIK DAN MATERI SISTEM KEAMANAN DATA\RAS\V3922006_Angga Yudho Nugroho_UTSbaru.pdf"
with open(output_path, "wb") as f:
    # Simpan pdf
    out.write(f)

# Pastikan untuk menutup file yang sedang dienkripsi
file.stream.close()