package intro_poo.aula;

public class Exemplo {
    public static void main(String[] args) throws Exception {
        Caneta c1 = new Caneta();
        c1.cor = "Azul";
        c1.ponta = 0.5f;
        c1.tampada = true;
        c1.rabiscar();
        c1.status();

        Caneta c2 = new Caneta();
        c2.cor = "Preta";
        c2.ponta = 0.7f;
        c2.tampada = false;
        c2.rabiscar();
        c2.status();
    }
}

/* public class Exemplo1 {
        public static void main(String[] args) {
        Pessoa p1 = new Pessoa();
        p1.nome = "Ana";
        p1.idade = 19;
        p1.apresentar();

    Pessoa p2 = new Pessoa();
    p2.nome = "Felipe";
    p2.idade = 23;
    p2.apresentar();
} */ 
