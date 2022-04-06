package linkaeapp;

public class Transaksi {
    String ID_Transaksi, ID_User, tipe, waktu;
    int nominal;

    public Transaksi(String ID_Transaksi_, String ID_User_, String tipe_, String waktu_, int nominal_) {
        this.ID_Transaksi = ID_Transaksi_;
        this.ID_User = ID_User_;
        this.tipe = tipe_;
        this.waktu = waktu_;
        this.nominal = nominal_;
    }
}
