package cn.sxt.test;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;

import cn.sxt.bean.Hello;

public class Test
{
	public static void main(String[] args)
	{
		//����bean.xml�ļ������ɹ�����Ӧ��bean����
		ApplicationContext context=new ClassPathXmlApplicationContext("beans.xml");
		Hello hello=(Hello) context.getBean("hello");
		hello.show();
	}
	
}