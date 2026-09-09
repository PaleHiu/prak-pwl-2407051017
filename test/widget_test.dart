import 'package:flutter_test/flutter_test.dart';

import 'package:prak_web_lanjut_2407051017/main.dart';

void main() {
  testWidgets('App smoke test', (WidgetTester tester) async {
    // Build our app and trigger a frame.
    await tester.pumpWidget(const MyApp());

    // Verify that our app bar title is displayed.
    expect(find.text('PRAKTIKUM MOBILE LANJUT'), findsOneWidget);

    // Verify that our greeting text is displayed.
    expect(find.text('Hallo, Nama saya Arif Ahmad Muzakky'), findsOneWidget);
  });
}
