package linkaeapp;

public class Pengguna extends Akun {
    public String ID_User;
    
    public Pengguna (String nama_, String username_, String password_, String ID_User_) {
        super(nama_, username_, password_);
        this.ID_User = ID_User_;
    }

    public Transaksi bayar(String ID_Transaksi_, String ID_User_, String tipe_, String waktu_, int nominal_) {
        return new Transaksi(ID_Transaksi_, ID_User_, tipe_, waktu_, nominal_);
    }

    public static void lihatPusatBantuan(CustomerService[] cs) {
        System.out.println("Nomor CS" +"\t" + "Status");
        for (int i = 0; i < 5; i++) {
            System.out.println(cs[i].noHP + "\t" + cs[i].status);
        }
    }
}