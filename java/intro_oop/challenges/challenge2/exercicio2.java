package intro_poo.exercicio2;

public class exercicio2 {
    public static void main(String[] args) {

        ContaBancaria conta = new ContaBancaria();

        conta.titular = "Lucas";

        conta.depositar(1000);
        conta.sacar(300);
        conta.depositar(1000);
        conta.depositar(0.70);

        conta.exibirInfo();
    }
}