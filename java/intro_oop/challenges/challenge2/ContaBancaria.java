package intro_poo.exercicio2;

public class ContaBancaria {

    String titular;
    double saldo = 0;

    public void depositar(double valor) {
        saldo += valor;
    }

    public void sacar(double valor) {
        if (valor <= saldo) {
            saldo -= valor;
        } else {
            System.out.println("Saldo insuficiente!");
        }
    }

    public void exibirInfo() {
        System.out.println("Titular: " + this.titular);
        System.out.println("Saldo: R$ " + this.saldo);
    }
}