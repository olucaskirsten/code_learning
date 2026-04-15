package intro_poo.exercicio3;

public class Carro {

    String marca;
    String modelo;
    int velocidade = 0;
    boolean ligado = false;

    public void ligar() {
        ligado = true;
        System.out.println("Carro ligado!");
    }

    public void desligar() {
        ligado = false;
        System.out.println("Carro desligado!");
    }

    public void acelerar() {
        if (ligado) {
            velocidade += 10;
        } else {
            System.out.println("Não é possível acelerar, carro desligado!");
        }
    }

    public void frear() {
        velocidade -= 10;
        if (velocidade < 0) {
            velocidade = 0;
        }
    }

    public void status() {
        System.out.println("Marca: " + this.marca);
        System.out.println("Modelo: " + this.modelo);
        System.out.println("Velocidade: " + this.velocidade);
        System.out.println("Ligado: " + (ligado ? "Sim" : "Não"));
        System.out.println("----------------------");
    }
}