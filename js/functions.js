function load_articles() {
    ajax_last_articles('last-news', 4, 1);
    ajax_last_articles('last-sport', 4, 2);
    ajax_last_articles('last-politics', 4, 3);
    ajax_last_articles('last-tech', 4, 4);
}