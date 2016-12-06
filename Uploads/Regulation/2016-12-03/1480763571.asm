assume cs:code

data segement
    db 10 dup(0)   ;定义十个数据空间，初始值均赋值为零
data ends

code segement
    start: mov ax,12666
            mov bx,data
            mov ds,bx
            mov si,0
            call dtoc
            ;经计算，12666小于十六位二进制的表示范围，所以是16位与8位的除法，商在al，余数在ah中

            mov dh,8
            mov dl,3
            mov cl,1
            call show_str

    dtoc:   push ax     ;将ax的值压栈
            mov dl,10D  ;将ax作为被除数，将dx作为除数
            div ax      ;得到商放入al，余数放入ah
            push ah     ;将余数进行压栈，保证先进后出
            ;加入判断的条件，当商为零时，停止循环，除数的操作
    show_str:
code ends
end start
