#include <stdio.h>
#include <stdlib.h>
int mutex=1;
int full=0;
int empty=10,x=0;
void producer(){
    --mutex;
    ++full;
    --empty;
    x++;
    printf("\n Producer Produces item %d ",x);
}
//function to consume an item and remove it from the buffer
void consumer(){
    //Decrease Mutex value by 1
    --mutex;
    //decrease the number of full slots by 1
    --full;
    //increase the number of empty slots by 1 
    ++empty;
    printf("Consumer consumes item %d ",x);
    x--;

}
//driver code
int main(){
    int n,i;
    printf("\n press 1 for producer \n press 2 for consumer  \n press 3 for Exit");
    for (i=1;i>0;i++){
        printf("\n Enter Your Choice:");
        scanf("%d",&n);

        switch(n){
                case 1:
                    if((mutex==1)&&( empty!=0)){
                        producer();
                    }
            else {
                printf("Buffer is Full");
            }
        break;
        case 2:
                if((mutex==1) && (full!=0)){
                    consumer();
                }
            else {
                printf("Buffer is Empty");
            }           
            break;
        case 3:
        exit(0);
        break;
        }
    }
}