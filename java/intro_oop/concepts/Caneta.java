package intro_poo.aula;

public class Caneta {
    String cor;
    float ponta;
    boolean tampada = true;

    public void status() {
        System.out.println("Cor: " + this.cor);
        System.out.println("Ponta: " + this.ponta);
        System.out.println("Tampada: " + (this.tampada ? "Sim" : "Não"));
    }

    public void destampar() {
        this.tampada = false;
    }

    public void tampar() {
        this.tampada = true;
    }

    public void rabiscar() {
        if (tampada == true) {
            System.out.println("caneta tampada não rabisca");
        } else {
            System.out.println("caneta destampada - pode rabiscar");
        }
    }
}
