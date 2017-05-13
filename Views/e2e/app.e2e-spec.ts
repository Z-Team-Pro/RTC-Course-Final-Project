import { ViewsPage } from './app.po';

describe('views App', () => {
  let page: ViewsPage;

  beforeEach(() => {
    page = new ViewsPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
