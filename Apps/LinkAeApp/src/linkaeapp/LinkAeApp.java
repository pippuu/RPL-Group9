package linkaeapp;
import java.util.Scanner;
import java.util.*;

public class LinkAeApp {
    public static void main(String[] args) {
        Pengguna userArr[ ]= new Pengguna[10];
        CustomerService CSArr[] = new CustomerService[5];
        userArr[0] = new Pengguna("Rafif", "Pipos", "1234", "101");
        CSArr[0] = new CustomerService("201", "08012186189212", "available");
        CSArr[1] = new CustomerService("202", "08081211311212", "available");
        CSArr[2] = new CustomerService("203", "05481212131212", "not available");
        CSArr[3] = new CustomerService("204", "00812121424212", "available");
        CSArr[4] = new CustomerService("205", "08012124241212", "not available");
        // Admin.editNamaPengguna(userArr[0]);
        
        Transaksi a = userArr[0].bayar("301", userArr[0].ID_User, "transportasi bus", "08:13", 200000);
        System.out.println(a.ID_Transaksi + a.ID_User + a.tipe + a.waktu + a.nominal);

        Pengguna.lihatPusatBantuan(CSArr);
    }
}