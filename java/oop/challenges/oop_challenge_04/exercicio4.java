package exercicio4;

public class exercicio4 {
    public static void main(String[] args) {

        Carro c1 = new Carro("Volkswagen", "Gol");
        Carro c2 = new Carro("Renault", "Sandero");

        c1.status();
        c1.ligar();
        c1.acelerar();
        c1.acelerar();
        c1.frear();
        c1.desligar();

        System.out.println();

        c2.status();
    }
}