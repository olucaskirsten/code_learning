package exercicio3;

public class exercicio3 {
    public static void main(String[] args) {
        /* ContaBancaria c1 = new ContaBancaria();
        c1.titular = "Antonio";
        c1.depositar(500);
        c1.sacar(600);
        c1.sacar(350);
        c1.exibirInfo();
        
        ContaBancaria c2 = new ContaBancaria();
        c2.titular = "Felipe";
        c2.depositar(1000);
        c2.exibirInfo(); */

        ContaBancaria c1 = new ContaBancaria("Felipe", 1000);
 
        System.out.println("Titular: " + c1.getTitular());
        c1.setSacar(1000);
        c1.setDepositar(2000);
        System.out.println("Saldo: " + c1.getSaldo());
    }
}
