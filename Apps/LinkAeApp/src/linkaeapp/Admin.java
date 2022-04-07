package linkaeapp;
import java.util.Scanner;  

public class Admin extends Akun {
    public String ID_Admin;
    
    public Admin (String nama_, String username_, String password_, String ID_Admin_) {
        super(nama_, username_, password_);
        this.ID_Admin = ID_Admin_;
    }

    public static void editNamaPengguna(Pengguna userToEdit) {
        Scanner sc = new Scanner(System.in);

        System.out.println("Nama awal: " + userToEdit.nama);
        System.out.print("Nama baru: ");
        String var = sc.nextLine();
        userToEdit.nama = var;
        System.out.println("Nama sekarang: " + userToEdit.nama);
    }
}