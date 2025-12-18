/**
 * @author AlexandrAnatoliev
 * @version 0.1.2 2025-12-18
 */
public class Main {
    public static void main(String[] args) {
        int answer = 0;

        for (int num = 1; num < 1000; num++) {
            if ((num % 3) == 0 || (num % 5) == 0)
                answer += num;
        }
        System.out.println("Answer = " + answer);
    }
}
