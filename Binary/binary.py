import cv2
import numpy as np

# Ganti mode baca menjadi cv2.IMREAD_GRAYSCALE
demo = cv2.imread("F:\SEMESTER 3\PRAKTIK DAN MATERI SISTEM KEAMANAN DATA\Binary\\ar.jpg", cv2.IMREAD_GRAYSCALE)

# Periksa apakah gambar berhasil dimuat
if demo is None:
    print("Error: Unable to load the image")
    exit()

r, c = demo.shape
key = np.random.randint(0, 256, size=(r, c), dtype=np.uint8)
cv2.imwrite("F:\SEMESTER 3\PRAKTIK DAN MATERI SISTEM KEAMANAN DATA\Binary\\KEY-ar.jpg", key)

cv2.imshow("demo", demo)
cv2.imshow("key", key)

encryption = cv2.bitwise_xor(demo, key)
cv2.imwrite("F:\SEMESTER 3\PRAKTIK DAN MATERI SISTEM KEAMANAN DATA\Binary\\ENC-ar.jpg", encryption)
decryption = cv2.bitwise_xor(encryption, key)
cv2.imwrite("F:\SEMESTER 3\PRAKTIK DAN MATERI SISTEM KEAMANAN DATA\Binary\\DES-ar.jpg", decryption)

cv2.imshow("encryption", encryption)
cv2.imshow("decryption", decryption)

cv2.waitKey(-1)
cv2.destroyAllWindows()