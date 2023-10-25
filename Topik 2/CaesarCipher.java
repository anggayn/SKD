public class CaesarCipher {
    // Fungsi untuk mengenkripsi teks menggunakan Caesar Cipher
    public static String encrypt(String text, int shift) {
        StringBuilder encryptedText = new StringBuilder();
        
        for (char character : text.toCharArray()) {
            if (Character.isLetter(character)) {
                char base = Character.isUpperCase(character) ? 'A' : 'a';
                char encryptedChar = (char) (base + (character - base + shift) % 26);
                encryptedText.append(encryptedChar);
            } else {
                encryptedText.append(character); // Biarkan karakter yang bukan huruf tetap sama
            }
        }
        
        return encryptedText.toString();
    }

    // Fungsi untuk mendekripsi teks yang telah dienkripsi menggunakan Caesar Cipher
    public static String decrypt(String encryptedText, int shift) {
        return encrypt(encryptedText, 26 - shift); // Mendekripsi dengan menggeser balik
    }

    public static void main(String[] args) {
        String plaintext = "angga yudho nugroho";
        int nomorAbsen = 5;  

        // Enkripsi teks
        String encryptedText = encrypt(plaintext, nomorAbsen);
        System.out.println("Plaintext: " + plaintext);
        System.out.println("Ciphertext: " + encryptedText);

        // Dekripsi teks
        String decryptedText = decrypt(encryptedText, nomorAbsen);
        System.out.println("Decrypted Text: " + decryptedText);
    }
}
