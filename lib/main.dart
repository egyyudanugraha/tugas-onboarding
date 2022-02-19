import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Project Hello World',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: const MyHomePage(title: 'Project Hello World'),
    );
  }
}

class MyHomePage extends StatefulWidget {
  const MyHomePage({Key? key, required this.title}) : super(key: key);

  final String title;

  @override
  State<MyHomePage> createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  List<String> _text = ["Hello World!"];

  void _changeText() {
    setState(() {
      if (_text[0] == "Hello World!") {
        _text = ["Muhammad Dandhy Ardhyansyah",	
                  "Elizabeth",	
                  "Rahadatul Aisy Putriani Helmi Haryanto",	
                  "Egy Yuda Nugraha",	
                  "Rasiyah Shafa Azizah"];
      } else {
        _text = ["Hello World!"];
      }
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children:
          _text.map((txt) => Text(txt, 
            style: Theme.of(context).textTheme.headline6
            )).toList(),
        ),
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: _changeText,
        tooltip: 'Change',
        child: const Icon(Icons.add),
      ), // This trailing comma makes auto-formatting nicer for build methods.
    );
  }
}
