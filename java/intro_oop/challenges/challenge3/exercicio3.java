package intro_poo.exercicio3;

public class exercicio3 {
    public static void main(String[] args) {

        Carro c1 = new Carro();
        Carro c2 = new Carro();

        // Carro 1
        c1.marca = "Toyota";
        c1.modelo = "Corolla";

        c1.ligar();
        c1.acelerar();
        c1.acelerar();
        c1.status();
        c1.frear();
        c1.status();
        c1.desligar();

        // Carro 2
        c2.marca = "Honda";
        c2.modelo = "Civic";

        c2.acelerar(); // vai dar erro (desligado)
        c2.ligar();
        c2.acelerar();
        c2.status();
    }
}